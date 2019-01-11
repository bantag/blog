
## Git Commands

git clone https://github.com/bantag/blog.git

git config --global user.name "bantag"

git config --global user.email "mkchoudharyji@gmail.com"

git add .

git status

git commit -m "comment"

git push -u origin master


If you want to revert changes made to your working copy, do this:

git checkout .

If you want to revert changes made to the index (i.e., that you have added), do this. Warning this will reset all of your unpushed commits to master!:

git reset
If you want to revert a change that you have committed, do this:

git revert <commit 1> <commit 2>
If you want to remove untracked files (e.g., new files, generated files):

git clean -f
Or untracked directories (e.g., new or automatically generated directories):

git clean -fd

https://blog.muva.tech/lesson-7-creating-showing-post-dashboard-blog-application-laravel-5-5/
