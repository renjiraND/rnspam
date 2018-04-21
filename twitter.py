import kmp
import boyer_moore
import regex
import tweepy,json,requests
import sys

auth = tweepy.OAuthHandler("sWFXVygF0VgUNQhEaOW6ERITz", "FMNRCEn2OhQq99v4UsFdqpuF5PxsDMIM1TMUviplHrgBDBvpa6")
auth.set_access_token("559404330-wyYTfnkJkoANwF1qAvaOJ9ptNp8y3o9QwBy7mB4e", "iJPDRU4bCruEAOqmiNASpfhF1SuN9XZOdV3RVMJl8Rb27")
url = 'http://localhost/stima/Tubz%20Steema/test.php'
api = tweepy.API(auth)

if __name__ == "__main__":
	searchKey = sys.argv[2].lower()

	query = api.search(q=searchKey, count=100)

	tweet = []

	for tweetapi in query:
		tweet.append(tweetapi.text)

	data = {}
	data['tweets'] = []

	if (sys.argv[1]=='-kmp'):
		for isi in tweet :
			spamidx=kmp.kmp(isi.lower(), sys.argv[3])
			data['tweets'].append({'tweet':isi, 'spamidx':spamidx})
	elif (sys.argv[1]=='-bm'):
		for isi in tweet :
			spamidx=boyer_moore.bmMatch(isi.lower(), sys.argv[3])
			data['tweets'].append({'tweet':isi, 'spamidx':spamidx})
	elif (sys.argv[1]=='-re'):
		for isi in tweet :
			spamidx=regex.regexMatch(isi.lower(), sys.argv[3])
			data['tweets'].append({'tweet':isi, 'spamidx':spamidx})

	with open('data.txt',  "w") as outfile:
		json.dump(data, outfile)
