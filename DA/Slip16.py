import nltk
import re
from nltk.corpus import stopwords
from nltk.tokenize  import word_tokenize,sent_tokenize

text="Text semmerisation is an #nlp technique that extract45 text from a large amount of data.It is the process of identifying the most meanigful information in a document and compressing it into a shorter version by preserving its meaning.@$ Types 12 :Extractive Text Summerisation"
print("\nOriginal Text : ")
print(text)
print("\n")
text=re.sub(r'[[0-9]*]', ' ', text)
text=re.sub(r'[[0-9]{}*]',' ', text)
ft=re.sub('[^a-zA-Z]', ' ' ,text)

print("\n Text after removing Special character,symbols and digits are : ")
print(ft)
print("\n")
sw=set(stopwords.words("english"))
print("\n Stopwords..... \n")
print(sw)
wd=word_tokenize(ft)
print("\n Word Tokens..... \n")
print(wd)
print("\n Extractive Text Summery \n ")

wordfreq = {}
for word in wd:
  if word in sw:
      continue
  if word in wordfreq:
     wordfreq[word] += 1
  else:
    wordfreq[word] = 1

maximum_frequency = max(wordfreq.values())
for word in wordfreq.keys():
    wordfreq[word] = (wordfreq[word]/maximum_frequency)

sentences = sent_tokenize(ft)
sentenceValue = {}
for sentence in sentences:
   for word, freq in wordfreq.items():
       if word in sentence.lower():
          if sentence in sentenceValue:
               sentenceValue[sentence] += freq
          else:
              sentenceValue[sentence] = freq
import heapq
summary = ''
summary_sentences = heapq.nlargest(4, sentenceValue, key=sentenceValue.get)
summary = ' '.join(summary_sentences)
print(summary)