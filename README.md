[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Blogger/functions?utm_source=RapidAPIGitHub_BloggerFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Blogger Package
Blogger is a blog-publishing service that allows multi-user blogs with time-stamped entries.
* Domain: [Blogger](http://http://blogger.com)
* Credentials: apiKey, apiSecret

## How to get credentials: 
1. Go to the [Google API Console](https://console.developers.google.com/flows/enableapi?apiid=prediction)
2. Create or select a project.
3. Click Continue to enable the API.
4. On the Credentials page, get an API key and API Secret. 


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Blogger.getAccessToken
getAccessToken

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key from Google
| apiSecret  | credentials| Api secret from Google
| code       | String     | code provided by user
| redirectUrl| String     | Your redirect url

## Blogger.getBlogById
Retrieves a blog by its ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| maxPosts   | Number| Maximum number of posts to retrieve along with the blog. When this parameter is not specified, no posts will be returned as part of the blog resource.

## Blogger.getBlogByUrl
Retrieves a blog by its url.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogUrl    | String| Url of the blog

## Blogger.listUserBlogs
Retrieves a list of blogs.

| Field        | Type  | Description
|--------------|-------|----------
| accessToken  | String| Accesss token from Google
| userId       | String| Id of the user
| fetchUserInfo| Select| Whether the response is a list of blogs with per-user information instead of just blogs.
| view         | Select| Acceptable values are: "ADMIN": Admin level detail "AUTHOR": Author level detail "READER": Admin level detail

## Blogger.listPostComments
Retrieves the list of comments for a post.

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | Accesss token from Google
| blogId     | String    | Id of the blog
| postId     | String    | Id of the post
| endDate    | DatePicker| Latest date of comment to fetch
| fetchBodies| Select    | Whether the body content of the comments is included.
| maxResults | Number    | Maximum number of comments to include in the result.
| pageToken  | String    | Continuation token if request is paged.
| startDate  | DatePicker| Earliest date of comment to fetch
| view       | Select    | Acceptable values are: "ADMIN": Admin level detail "AUTHOR": Author level detail "READER": Admin level detail
| status     | Select    | Acceptable values are: "emptied": Comments that have had their content removed "live": Comments that are publicly visible "pending": Comments that are awaiting administrator approval "spam": Comments marked as spam by the administrator

## Blogger.getPostComment
Retrieves one comment resource by its commentId.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| postId     | String| Id of the post
| commentId  | String| Id of the comment

## Blogger.approvePostComment
Marks a comment as not spam.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| postId     | String| Id of the post
| commentId  | String| Id of the comment

## Blogger.deletePostComment
Delete a comment by ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| postId     | String| Id of the post
| commentId  | String| Id of the comment

## Blogger.listBlogComments
Retrieves the comments for a blog, across all posts, possibly filtered.

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | Accesss token from Google
| blogId     | String    | Id of the blog
| endDate    | DatePicker| Latest date of comment to fetch
| fetchBodies| Select    | Whether the body content of the comments is included.
| maxResults | Number    | Maximum number of comments to include in the result.
| pageToken  | String    | Continuation token if request is paged.
| startDate  | DatePicker| Earliest date of comment to fetch

## Blogger.markCommentAsSpam
Marks a comment as spam. This will set the status of the comment to spam, and hide it in the default comment rendering.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| postId     | String| Id of the post
| commentId  | String| Id of the comment

## Blogger.removeCommentContent
Removes the content of a comment.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| postId     | String| Id of the post
| commentId  | String| Id of the comment

## Blogger.listBlogPages
Retrieves the list of pages for a blog.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| fetchBodies| Select| Whether the body content of the comments is included.
| view       | Select| Acceptable values are: "ADMIN": Admin level detail "AUTHOR": Author level detail "READER": Admin level detail
| status     | Select| Acceptable values are: "draft": Draft (unpublished) Pages "live": Pages that are publicly visible

## Blogger.getSinglePage
Retrieves one pages resource by its page ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| pageId     | String| Id of the page
| view       | Select| Acceptable values are: "ADMIN": Admin level detail "AUTHOR": Author level detail "READER": Admin level detail

## Blogger.deleteSinglePage
Deletes one pages resource by its page ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| pageId     | String| Id of the page

## Blogger.addPage
Add a page.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| isDraft    | Select| Is page draft or not
| content    | String| Page content
| title      | String| Page title

## Blogger.partPageUpdate
Update existing page partly only with data you provide

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| pageId     | String| Id of the page
| publish    | Select| Whether to publish page or not
| revert     | Select| Whether to revert page or not
| content    | String| Page content
| title      | String| Page title

## Blogger.fullPageUpdate
Update existing page partly with data you provide. All empty fields will be cleared

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| pageId     | String| Id of the page
| publish    | Select| Whether to publish page or not
| revert     | Select| Whether to revert page or not
| content    | String| Page content
| title      | String| Page title

## Blogger.listPosts
Retrieves a list of posts.

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | Accesss token from Google
| blogId     | String    | Id of the blog
| endDate    | DatePicker| Latest date of post to fetch
| fetchBodies| Select    | Whether the body content of the post is included.
| fetchImages| Select    | Whether image URL metadata for each post is included.
| labels     | List      | Array of labels to search for
| orderBy    | Select    | Sort order applied to results.
| maxResults | Number    | Maximum number of comments to include in the result.
| pageToken  | String    | Continuation token if request is paged.
| startDate  | DatePicker| Earliest date of comment to fetch
| view       | Select    | Acceptable values are: "ADMIN": Admin level detail "AUTHOR": Author level detail "READER": Admin level detail
| status     | Select    | Acceptable values are: "draft": Draft posts "live": Published posts "scheduled": Posts that are scheduled to publish in future.

## Blogger.getSinglePostById
Retrieves one post by post ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| postId     | String| Id of the post
| maxComments| Number| Maximum number of comments to retrieve as part of the the post resource. If this parameter is left unspecified, then no comments will be returned.
| view       | Select| Acceptable values are: "ADMIN": Admin level detail "AUTHOR": Author level detail "READER": Admin level detail
| fetchBody  | Select| Whether the body content of the post is included.
| fetchImages| Select| Whether image URL metadata for each post is included.

## Blogger.searchPosts
Searches for a post that matches the given query terms.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| query      | String| Query terms to search for.
| fetchBodies| Select| Whether the body content of the post is included.
| orderBy    | Select| The sort order applied to the search results. 

## Blogger.addPost
Add a post.

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Accesss token from Google
| blogId      | String| Id of the blog
| isDraft     | Select| Is page draft or not
| fetchBody   | Select| Whether the body content of the post is included.
| fetchImages | Select| Whether image URL metadata for each post is included.
| content     | String| Page content
| title       | String| Page title
| location    | Map   | Your location
| locationName| String| Your location name
| locationSpan| String| Your location span
| labels      | List  | Array of labels to search for
| titleLink   | String| The title link URL, similar to atom's related link.

## Blogger.deletePost
Deletes one post by post ID.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| postId     | String| Id of the post

## Blogger.getSinglePostByPath
Retrieves one post by post path.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| postPath   | String| Path of the post
| maxComments| Number| Maximum number of comments to retrieve as part of the the post resource. If this parameter is left unspecified, then no comments will be returned.
| view       | Select| Acceptable values are: "ADMIN": Admin level detail "AUTHOR": Author level detail "READER": Admin level detail

## Blogger.partPostUpdate
Updates a post with information provided

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Accesss token from Google
| blogId      | String| Id of the blog
| postId      | String| Id of the post
| isDraft     | Select| Is page draft or not
| fetchBody   | Select| Whether the body content of the post is included.
| fetchImages | Select| Whether image URL metadata for each post is included.
| content     | String| Page content
| title       | String| Page title
| location    | Map   | Your location
| locationName| String| Your location name
| locationSpan| String| Your location span
| labels      | List  | Array of labels to search for
| titleLink   | String| The title link URL, similar to atom's related link.
| publish     | Select| Whether to publish page or not
| revert      | Select| Whether to revert page or not
| maxComments | Number| Maximum number of comments to retrieve as part of the the post resource. If this parameter is left unspecified, then no comments will be returned.

## Blogger.fullPostUpdate
Updates a post with information provided, non-provided fields are removed

| Field       | Type  | Description
|-------------|-------|----------
| accessToken | String| Accesss token from Google
| blogId      | String| Id of the blog
| postId      | String| Id of the post
| isDraft     | Select| Is page draft or not
| fetchBody   | Select| Whether the body content of the post is included.
| fetchImages | Select| Whether image URL metadata for each post is included.
| content     | String| Page content
| title       | String| Page title
| location    | Map   | Your location
| locationName| String| Your location name
| locationSpan| String| Your location span
| labels      | List  | Array of labels to search for
| titleLink   | String| The title link URL, similar to atom's related link.
| publish     | Select| Whether to publish page or not
| revert      | Select| Whether to revert page or not
| maxComments | Number| Maximum number of comments to retrieve as part of the the post resource. If this parameter is left unspecified, then no comments will be returned.

## Blogger.publishPost
Publish a draft post. 

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | Accesss token from Google
| blogId     | String    | Id of the blog
| postId     | String    | Id of the post
| publishDate| DatePicker| The date and time to schedule the publishing of the Post.

## Blogger.revertPost
Revert a published or scheduled post to draft state, which removes the post from the publicly viewable content.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| postId     | String| Id of the post

## Blogger.getUserInfo
Retrieves a user by user ID. 

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| userId     | String| Id of the user

## Blogger.getBlogUserInfo
Gets one blog and user info pair by blogId and userId.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| userId     | String| Id of the user
| blogId     | String| Id of the blog
| maxPosts   | Number| Maximum number of posts to pull back with the blog.

## Blogger.getBlogPageViews
Retrieve pageview stats for a Blog.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Accesss token from Google
| blogId     | String| Id of the blog
| range      | Select| Acceptable values are: "30DAYS": Page view counts from the last thirty days. "7DAYS": Page view counts from the last seven days. "all": Total page view counts from all time.


## Blogger.listPostUserInfo
Retrieves a list of post and post user info pairs, possibly filtered. The post user info contains per-user information about the post, such as access rights, specific to the user.

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | Accesss token from Google
| userId     | String    | Id of the user
| blogId     | String    | Id of the blog
| endDate    | DatePicker| Latest date of post to fetch
| fetchBodies| Select    | Whether the body content of the post is included.
| fetchImages| Select    | Whether image URL metadata for each post is included.
| labels     | List      | Array of labels to search for
| orderBy    | Select    | Sort order applied to results.
| maxResults | Number    | Maximum number of comments to include in the result.
| pageToken  | String    | Continuation token if request is paged.
| startDate  | DatePicker| Earliest date of comment to fetch
| view       | Select    | Acceptable values are: "ADMIN": Admin level detail "AUTHOR": Author level detail "READER": Admin level detail
| status     | Select    | Acceptable values are: "draft": Draft posts "live": Published posts "scheduled": Posts that are scheduled to publish in future.

