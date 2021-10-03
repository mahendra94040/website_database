import requests

url = 'http://localhost/insert.php'
query = {'fname': 'MAHENDRA',
	'image':'',
	'submit':'true'}
res = requests.post(url, data=query)
print(res.text)