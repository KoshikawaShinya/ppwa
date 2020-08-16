import cv2
import sys
import os
import glob
import pickle
import numpy as np
import tensorflow as tf

# 整形しろ
img_size = 500

with open('count.pickle', 'rb') as f:
    count = pickle.load(f)

model = tf.keras.models.load_model('saved_model/PredictFruit_' + str(count) + '.h5')
for img_path in glob.glob('../storage/app/public/judge/origin/*'):

    img = cv2.imread(img_path, cv2.IMREAD_COLOR)
    reshaped_img = img.reshape([1, img_size, img_size, -1])
    predict = model.predict(reshaped_img)
    num = np.argmax(predict) + 1

    print(num)
