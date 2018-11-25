<div class="content">
    <div id="pages">       
    <? if ($content_page) : ?>
        <? if ($content_page['type'] == 'contacts'): ?>
            <h2><?=$content_page['title'];?></h2>
            <?=$content_page['text'];?>
             <p style="text-align:center; margin-bottom:20px;"><span style="color:#FF0000;">Обратная связь</span></p>
                <form method="post" action="">
                    <table class="table_mail">
                        <tr>
                        	<td>* Имя:</td> 
                            <td><input type="text" name="name_mail" value=""/></td>
                        </tr>
                        <tr>
                        	<td>* e-mail:</td> 
                            <td><input type="text" name="mail" value=""/></td>
                        </tr>
                        <tr>
                          <td>Я робот: </td>
                          <td style="float:left; margin-right:10px;"><input name="aspam" type="checkbox"  checked="checked"/></td>
                          <td class="aspam">(для подтверждения того что вы являетесь человеком, уберите галочку)</td>
                       </tr>
                        <tr>
                        	<td>* Сообщение:</td> 
                            <td><textarea  rows="3" name="text_mail"></textarea></td>
                        </tr>
                        <tr>
                        	<td colspan="2" class="mail_input"><input type="submit" name="submit_mail" class="submit_mail" value="Отправить" /></td>
                        </tr>
                    </table>
                </form>
        <? else : ?>
            <h2><?=$content_page['title'];?></h2>
            <?=$content_page['text'];?>
        <? endif; ?>
    <? else : ?>
        <p id="no_text_recipe">Такой страницы не существует.</p>
    <? endif; ?>   
    </div>
</div>