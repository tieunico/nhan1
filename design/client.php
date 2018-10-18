<html>
<body>
    <div>
        <form>
        <table>
            <tr>
                <td>
                    <label>Enter Message </label>
                    <input type='text' name='txtMessage'>
                    <input type='submit' name='btnSend' value='Send'>
                </td>
            </tr>
            <?php
                $host ="localhost";
                $port=20205;

                if(isset($_POST['btnSend'])){
                    $msg=$_REQUEST['txtMessage'];

                    $socket=socket_create(AF_INET, SOCK_STREAM, 0);
                    socket_connect($socket,$host,$port);

                    socket_write($socket, $msg, strlen($msg));

                    $reply=socket_read($socket, 1024);
                    $reply =trim($reply);
                    $reply="Server saying: \t".$reply;


             ?>

             <tr>
                 <td>
                     <textarea rows= '10' col='30' ><?php echo @$reply; ?></textarea>
                 </td>
             </tr>
        </table>
        </form>
    </div>
</body>
</html>
