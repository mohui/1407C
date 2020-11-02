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
?>
