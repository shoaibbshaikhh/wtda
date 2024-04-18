from pandas import*
from mlxtend.frequent_patterns import apriori, association_rules
from mlxtend.preprocessing import TransactionEncoder
transaction=[['butter','bread','milk'],
             ['butter','flour','milk','sugar'],
             ['butter','eggs','milk','salt'],
             ['eggs'],
             ['Bread','flour','milk','salt']]

te=TransactionEncoder()
arr=te.fit(transaction).transform(transaction)
df=DataFrame(arr,columns=te.columns_)             
print(df)

freq_itemset=apriori(df,min_support=0.5,use_colnames=True)
print("Frequent Itemsets:\n",freq_itemset)

rules=association_rules(freq_itemset,metric='support',min_threshold=0.05)
rules=rules.sort_values(['support','confidence'],ascending=[False,False])
print("Association rules:\n",rules)

