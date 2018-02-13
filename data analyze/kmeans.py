import numpy as np
import pandas as pd
from pandas import DataFrame
import h5py
from numpy import array
from math import sqrt
from sklearn import metrics
from sklearn.cluster import KMeans
from sklearn.decomposition import PCA
from sklearn.preprocessing import scale
from scipy import stats
from pyspark.mllib.clustering import KMeans, KMeansModel
from pyspark import SparkContext
from scipy.spatial import distance
raw_data_total = DataFrame.from_csv('/Users/zqq/Downloads/cluster_data.csv')

raw_data = raw_data_total[raw_data_total.columns.values[1:116]]

scale_data = DataFrame(columns=raw_data.columns.values)

for col in raw_data.columns.values:
    scale_data[col] = stats.zscore(raw_data[col])
    
scale_data = DataFrame.as_matrix(scale_data)

pca = PCA(n_components=20)
pca.fit(scale_data)

#Use PCA to reduce the dimension
transform_data = pca.transform(scale_data)
data_array = transform_data

DataFrame(transform_data).to_csv('temp.csv')


#Using K-means to classify the data

model = KMeans.train(sc.parallelize(data_array),6, maxIterations=50, runs=30, initializationMode="random")

data_cluster = np.array([])
for k in range(0,data_array.shape[0]):
    clusters = model.predict(data_array[k])
    data_cluster = np.append(data_cluster,clusters)
    print 'data of row', k, 'is cluster:',clusters

file_path = raw_data_total['file_path']

cluster_dataframe = DataFrame({'file_path':file_path,
                               'cluster':data_cluster})
cluster_dataframe.to_csv('cluster.csv')