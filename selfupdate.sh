#delete old vendors
git checkout master
cd code/var/site/
rm -rf ./vendors
composer self-update
composer update
find ./vendor | grep .git | xargs rm -rf
git add .
git commit -m "composer self update"
