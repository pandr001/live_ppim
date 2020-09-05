<section class="content-header">
wasd
    <h1 style="text-align:center;">
        <?=$data['layout']['title'];?>
     </h1>
    <ol class="breadcrumb">
        <li>
        	<a href="<?=URL_ROOT;?>"><i class="fa fa-dashboard"></i> Home</a>
        </li>
        <?php 
            if (isset($this->url[1])) {
                if ($this->url[1]!=strtolower($data['layout']['title'])) {
            	   echo '
                		<li  style="font-weight:bold;">
                			<a href="'.URL_ROOT.$this->url[0].'/'.strtolower($data['layout']['big_title']).'">'.$data['layout']['big_title'].'</a>
                		</li>
                		<li class="active" style="color:green;font-weight:bold;">
                			'.ucwords($data['layout']['small_title']).'
                		</li>
                	'; 	
            	} 
            } 
            elseif (!isset($this->url[1])) {
                echo '
                    <li  style="font-weight:bold;">
                        <a href="'.URL_ROOT.strtolower($data['layout']['big_title']).'">'.$data['layout']['big_title'].'</a>
                    </li>
                    <li class="active" style="color:green;font-weight:bold;">
                        '.ucwords($data['layout']['small_title']).'
                    </li>
                ';  
            }
            else{
                echo '
                    <li class="active" style="color:green;font-weight:bold;">
                        '.$data['layout']['big_title'].'
                    </li>
                ';
            }
        ?>
    </ol>
</section>