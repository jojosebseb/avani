<?php $i=0;foreach(glob('*.html') as $v)echo ++$i.'.<a target="_blank" href="http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].$v.'">'.$v.'</a><br/>'; ?>