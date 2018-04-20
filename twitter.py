import tweepy,json,requests
import sys

auth = tweepy.OAuthHandler("sWFXVygF0VgUNQhEaOW6ERITz", "FMNRCEn2OhQq99v4UsFdqpuF5PxsDMIM1TMUviplHrgBDBvpa6")
auth.set_access_token("559404330-wyYTfnkJkoANwF1qAvaOJ9ptNp8y3o9QwBy7mB4e", "iJPDRU4bCruEAOqmiNASpfhF1SuN9XZOdV3RVMJl8Rb27")
url = 'http://localhost/stima/Tubz%20Steema/test.php'
api = tweepy.API(auth)

if __name__ == "__main__":
	searchKey = ""
	for i in range(1,len(sys.argv)):
		if (i>1) :
			searchKey += " "
		searchKey += sys.argv[i]
	
	query = api.search(q=searchKey, count=500)
	
	data = {}
	data['text'] = []

	for tweet in query:
		data['text'].append({'test':tweet.text})

	with open('data.txt',  "w+") as outfile:  
		json.dump(data, outfile)
