import pandas as pd
from mlxtend.frequent_patterns import apriori, association_rules
from mlxtend.preprocessing import TransactionEncoder
transaction=[['eggs','milk','bread'],
             ['eggs','apple'],
             ['milk','bread'],
             ['apple','milk'],
             ['milk','apple','bread']];

te=TransactionEncoder()
arr=te.fit(transaction).transform(transaction)
df=pd.DataFrame(arr,columns=te.columns_)             
print(df)

freq_itemset=apriori(df,min_support=0.5,use_colnames=True)
print("Frequent Itemsets:\n",freq_itemset)

rules=association_rules(freq_itemset,metric='support',min_threshold=0.05)
rules=rules.sort_values(['support','confidence'],ascending=[False,False])
print("Association rules:\n",rules)


