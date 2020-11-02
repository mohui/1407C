<?php
	header("Content-Type: text/html; charset=UTF-8");
	// 配置Git：
	echo "1、安装完后，右键单击桌面空白处，选择Git Gui Here，进去之后，选择左上角的help选项，会出现一个Show SSH Key，然后点击“Generate Key”得到秘钥。将其复制到剪切板。";
	echo "</br>";
	echo "2、打开GitHub，登陆后，打开设置界面，在SSH Keys栏中点击“Add SSH key”按钮，然后复制上面生成的秘钥。";
	echo "</br>";
	// 开始使用git
	echo "3、此时便可以开始使用Git功能了，右键单击桌面空白处，选择Git Bash Here，进去后便可进入git控制台，对于首次安装git的机器，一定要首先进行用户账户信息的配置：";
	echo "</br>";
	// 特别注意：--和global之间没有空格
	echo 'git config --global user.name "你的github用户名"';
	echo "</br>";
	echo 'git config --global user.email "你的github邮箱地址"';
	echo "</br>";
	echo '将项目从GitHub上克隆到本地，首先打开你要想项目存放到本地的目录，例如：我的Git安装在E盘中，而我想将项目存放到D目录下的myProject中，操作如下：';
	
	//cd d:
	// cd myProject
	echo "</br>";
	echo "然后git clone +你想要克隆的项目的地址。如： git clone https://github.com/mohui/1407C.git";
	
	
	echo "1：git status//查看当前项目文件状态，如果第一次，你会发现都红颜色的，因为它还没有交给git管理。</br>";
	echo "2：git add . //（.）点表示当前目录下的所有内容，交给git管理，也就是提交到了git的本地仓库。</br>";
	echo "3：git commit -m ‘添加说明’ //对你更新或修改了哪些内容做一个描述。</br>";
	echo "4：git push -u origin master //将本地的项目提交到远程仓库中。</br>";
?>
