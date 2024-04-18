import nltk
import re
from nltk.corpus import stopwords
from nltk.tokenize  import word_tokenize,sent_tokenize
from nltk.probability import FreqDist
import matplotlib.pyplot as plt
from wordcloud import WordCloud
te="""Hello all, Welcome to Python Programming Academy. Python 
Programming Academy is a nice platform to learn new programming skills. It is difficult to get enrolled 
in this Academy."""
print("\n Text is.....\n")
print(te)
sw=set(stopwords.words("english"))
print("\n Stopwords..... \n")
print(sw)
st=sent_tokenize(te)
print("\n Sent Tokens..... \n")
print(st)
wd=word_tokenize(te)
print("\n Word Tokens..... \n")
print(wd)
ft=[]
for w in wd:
    if w not in sw:
        ft.append(w)
print("\n Text After removing Stopwords \n ",ft)
fd=FreqDist(wd)
print("\n",fd)
fd.plot(49,cumulative=False)
plt.show()
wc=WordCloud(collocations=False,background_color="black").generate(te)
plt.imshow(wc,interpolation="bilinear")
plt.axis("off")
plt.show()
