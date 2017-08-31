<?php
$routes = [
    'metadata',
    'getAccessToken',
    'getBlogById',
    'getBlogByUrl',
    'listUserBlogs',
    'listPostComments',
    'getPostComment',
    'approvePostComment',
    'deletePostComment',
    'listBlogComments',
    'markCommentAsSpam',
    'removeCommentContent',
    'listBlogPages',
    'getSinglePage',
    'deleteSinglePage',
    'addPage',
    'partPageUpdate',
    'fullPageUpdate',
    'listPosts',
    'getSinglePostById',
    'searchPosts',
    'addPost',
    'deletePost',
    'getSinglePostByPath',
    'partPostUpdate',
    'fullPostUpdate',
    'publishPost',
    'revertPost',
    'getUserInfo',
    'getBlogUserInfo',
    'getBlogPageViews',
    'getPostUserInfo',
    'listPostUserInfo'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

