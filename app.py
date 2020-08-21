import requests as req

def file_upload() :
  url = 'https://www.cryptappz.com/api-python/'
  file = {'myfile': open('01.jpg', 'rb')}

  #Upload File
  res = req.post(url, files=file)

  # print(res.status_code)
  print(res.text)

file_upload()
