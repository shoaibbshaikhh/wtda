import pandas as pd
df=pd.read_csv("Files/INvideos.csv")

df=df.drop(['video_id','trending_date','channel_title','category_id','publish_time','tags',
'thumbnail_link','comments_disabled','ratings_disabled','video_error_or_removed'],axis=1)

df[['views','likes','dislikes','comment_count']]=df[['views','likes','dislikes',
'comment_count']].astype(int)

total_views=df['views'].sum()
total_likes=df['likes'].sum()
total_dislikes=df['dislikes'].sum()
total_comments=df['comment_count'].sum()
print('TotalViews:',total_views)
print('TotalLikes:',total_likes)
print('TotalDislikes:',total_dislikes)
print('TotalComments:',total_comments)
