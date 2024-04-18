import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn import metrics

salaries = {
    'YearsExperience': [1, 2, 3, 4, 5],
    'Salary': [30000, 35000, 40000, 45000, 50000]
}

data = pd.DataFrame(salaries)
X_train, X_test, y_train, y_test = train_test_split(data['YearsExperience'], data['Salary'], test_size=0.7, random_state=0)

X_train = X_train.values.reshape(-1, 1)
X_test = X_test.values.reshape(-1, 1)

model = LinearRegression()
model.fit(X_train, y_train)

predictions = model.predict(X_test)

print("Predictions:")
print(predictions[:5])

print("\nActual values:")
print(y_test.head())

y_pred = model.predict(X_test)
print('y prediction: ',y_pred)

mse = metrics.mean_squared_error(y_test, y_pred)
rmse = np.sqrt(mse)
print("\nModel Evaluation:")
print("Mean Squared Error (MSE):", mse)
print("Root Mean Squared Error (RMSE):", rmse)

print("Coefficients:",model.coef_)
print("Intercept:",model.intercept_)