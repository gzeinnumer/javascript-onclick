<?php $i =1;?>
<td>
    <div id="divBangku_<?php echo $i ?>" onclick="ambilBangku(this)" 
    style="cursor:pointer;text-align: center;
    background: cyan;width: 100px;height: 100px;padding-top: 15%;font-size: 50px;"><?php echo $i ?></div>
    <input type="checkbox" name="bangku[]" id="bangku_<?php echo $i ?>" value="0" >
</td>

<script type="text/javascript">
    function ambilBangku(bangku){
        alert(bangku.innerHTML);
        document.getElementById('divBangku_'+bangku.innerHTML).style.background = 'red';
        document.getElementById('bangku_'+bangku.innerHTML).checked = true;
    }
</script>