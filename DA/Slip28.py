import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
import matplotlib.pyplot as plt
import numpy as np
from sklearn import metrics
df = pd.read_csv("Files/car_data (1).csv")

print(df.head())
X = df[['selling_price']]
y = df['km_driven']

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=44)
model=LinearRegression()
model.fit(X_train, y_train)
y_pred = model.predict(X_test)
print('Coefficients:', model.coef_)
print('Intercept:', model.intercept_)
plt.scatter(X_test, y_test, color='black')
plt.plot(X_test, y_pred, color='blue', linewidth=3)
plt.xlabel('selling_price')
plt.ylabel('km_driven')
plt.title('Linear Regression: selling_price vs km_driven')
plt.show()

mse = metrics.mean_squared_error(y_test, y_pred)
rmse = np.sqrt(mse)
print("\nModel Evaluation:")
print("Mean Squared Error (MSE):", mse)
print("Root Mean Squared Error (RMSE):", rmse)

print("Coefficients:",model.coef_)
print("Intercept:",model.intercept_)