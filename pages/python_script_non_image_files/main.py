import os

def get_all_non_image_files():
	path = "."
	for files in os.walk(path):
		with open('non_images.txt','w') as f:
			for file in files:
				if file.endswith(".html",".shtml",".m",".js",".css",".cfg",".pdf",".txt",".py"):
					f.write(file + "\n")





if __name__ == '__main__':
	get_all_non_image_files();
