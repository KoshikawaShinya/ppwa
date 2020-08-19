import glob
import os
import cv2
import pickle
import numpy as np
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.metrics import classification_report
from tensorflow.python import keras as K


img_size = 300
img_num = 2

with open('count.pickle', 'rb') as f:
    count = pickle.load(f)

label = 0
datas = []
labels = []
# 画像をテンソル化
for fold_path in glob.glob('../storage/app/public/photo_images/resized/*'):
    imgs = glob.glob(fold_path + '/*')

    for img_path in imgs:
        img = cv2.imread(img_path)
        datas.append(img)
        labels.append(label)
    
    label += 1

image_datas = np.array(datas)
image_labels = np.array(labels)

x_train, x_test, y_train, y_test = train_test_split(image_datas, image_labels)


x_train = x_train / 255
x_test = x_test / 255

model = K.Sequential([
    # K.layers.Conv2D(フィルタの枚数, フィルタサイズ(a,a), インプットの形, 活性化関数)
    K.layers.Conv2D(32, kernel_size=(3, 3), strides=1, input_shape=(img_size, img_size, 3), activation="relu"),
    K.layers.MaxPooling2D(pool_size=(2,2)),
    K.layers.Conv2D(64, (3, 3), strides=1, activation="relu"),
    K.layers.MaxPooling2D(pool_size=(2,2)),
    K.layers.Conv2D(64, (3, 3), strides=1, activation="relu"),
    # 一次元のベクトルに変換
    K.layers.Flatten(),
    K.layers.Dense(64, activation="relu"),
    K.layers.Dense(img_num, activation="softmax")
])

model.compile(optimizer="adam", loss="sparse_categorical_crossentropy", metrics=["accuracy"])
model.fit(x_train, y_train, epochs=5)

predicts = model.predict(x_test)
predicts = np.argmax(predicts, axis=1)
print(classification_report(y_test, predicts))

count += 1
model.save('saved_model/PredictFruit_' + str(count) + '.h5')

with open('count.pickle', 'wb') as f:
    pickle.dump(count, f)