import cv2
import sys
import os
import glob
import pickle
import numpy as np
import tensorflow as tf


def cut(img_path):
    img = cv2.imread(img_path, cv2.IMREAD_COLOR)
    x, y = img.shape[1] // 2, img.shape[0] // 2,
    new_img = img[max([0, y - w]) : y + w, max([0, x - w]) : x + w]
    resized_img = cv2.resize(new_img, (2*w, 2*w))
    reshaped_img = img.reshape([1, img_size, img_size, -1])
    return reshaped_img


img_size = 500

with open('count.pickle', 'rb') as f:
    count = pickle.load(f)

model = tf.keras.models.load_model('saved_model/PredictFruit_' + str(count) + '.h5')
for img_path in glob.glob('../storage/app/public/judge/origin/*'):

    img = cut(img_path)
    predict = model.predict(reshaped_img)
    num = np.argmax(predict) + 1

    print(num)
    os.remove(img_path)
