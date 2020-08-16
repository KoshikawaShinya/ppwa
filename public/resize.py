import cv2
import time
import glob # ファイル読み込みで使用
import os # フォルダ作成で使用


for fold_path in glob.glob('../../../storage/app/public/photo_images/origin/*'):
    count = 0

    # 画像全部のディレクトリリスト
    imgs = glob.glob(fold_path + '/*')
    # 画像保存先のフォルダ名
    save_path = fold_path.replace('origin','resized')
    
    # 保存先のフォルダがなかったら、フォルダ作成
    if not os.path.exists(save_path):
        os.makedirs(save_path)

    # 画像ごとに処理
    for img_path in imgs:
        img = cv2.imread(img_path, cv2.IMREAD_COLOR)
        x, y = img.shape[1] // 2, img.shape[0] // 2,
        w = 150
        resized_img = img[y - w : y + w, x - w : x + w]
        ut = time.time()
        save_img_path = save_path + '/' + str(ut) + '.jpg'
        cv2.imwrite(save_img_path, resized_img)
        
        