# wwwrootとファイルの作成
cd Inquiry/
mkdir wwwroot
cd wwwroot/
echo "Inquiry test" > index.php

# シンボリックリンクの作成
cd
cd wwwroot/
ln -s ~/Inquiry/wwwroot  Inquiry


