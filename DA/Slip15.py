import pandas as pd
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules
from sklearn.preprocessing import LabelEncoder
data = {
    'no': [0, 1, 2, 3],
    'company': ['Tata', 'MG', 'Kia', 'Hyundai'],
    'model': ['Nexon', 'Astor', 'Seltos', 'Creta'],
    'year': [2017, 2021, 2019, 2015]
}

df = pd.DataFrame(data)
label_encoder = LabelEncoder()
df['company'] = label_encoder.fit_transform(df['company'])
df['model'] = label_encoder.fit_transform(df['model'])

transactions = df.values.tolist()

te = TransactionEncoder()
te_ary = te.fit(transactions).transform(transactions)
df_encoded = pd.DataFrame(te_ary, columns=te.columns_)

min_support_values = [0.2, 0.3]  
for min_support in min_support_values:
    frequent_itemsets = apriori(df_encoded, min_support=min_support, use_colnames=True)
    print(f"Frequent Itemsets with min_sup = {min_support}:\n", frequent_itemsets)

    rules = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.7)
    print(f"\nAssociation Rules with min_sup = {min_support}:\n", rules)
    print("\n")
