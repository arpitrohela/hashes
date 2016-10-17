<?php
    if($_POST['submit_button'] == "Md5")
    {
        $str= $_POST['name'];
        print(md5($str));
        
    }
    if($_POST['submit_button'] == "Sha1")
    {
        $str=$_POST['name'];
        print(sha1($str));
    }
    if($_POST['submit_button'] == "Md4")
    {
       $str=$_POST['name'];
       print(hash(md4,$str));
    }
    if($_POST['submit_button'] == "Md2")
    {
       $str=$_POST['name'];
       print(hash(md2,$str));
    }
    if($_POST['submit_button'] == "sha256")
    {
       $str=$_POST['name'];
       print(hash(sha256,$str));
    }
    if($_POST['submit_button'] == "sha224")
    {
       $str=$_POST['name'];
       print(hash(sha224,$str));
    }
    if($_POST['submit_button'] == "sha384")
    {
       $str=$_POST['name'];
       print(hash(sha384,$str));
    }
    if($_POST['submit_button'] == "sha512")
    {
       $str=$_POST['name'];
       print(hash(sha512,$str));
    }
    if($_POST['submit_button'] == "ripemd128")
    {
       $str=$_POST['name'];
       print(hash(ripemd128,$str));
    }
    if($_POST['submit_button'] == "ripemd160")
    {
       $str=$_POST['name'];
       print(hash(ripemd160,$str));
    }
    if($_POST['submit_button'] == "ripemd256")
    {
       $str=$_POST['name'];
       print(hash(ripemd256,$str));
    }
    if($_POST['submit_button'] == "ripemd320")
    {
       $str=$_POST['name'];
       print(hash(ripemd320,$str));
    }
    if($_POST['submit_button'] == "whirlpool")
    {
       $str=$_POST['name'];
       print(hash(whirlpool,$str));
    }
    if($_POST['submit_button'] == "tiger128,3")
    {
       $str=$_POST['name'];
       $s="tiger128,3";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "tiger160,3")
    {
       $str=$_POST['name'];
       $s="tiger160,3";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "tiger160,4")
    {
       $str=$_POST['name'];
       $s="tiger160,4";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "tiger128,4")
    {
       $str=$_POST['name'];
       $s="tiger128,4";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "tiger192,3")
    {
       $str=$_POST['name'];
       $s="tiger192,3";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "tiger192,4")
    {
       $str=$_POST['name'];
       $s="tiger192,4";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "snefru")
    {
       $str=$_POST['name'];
       print(hash(snefru,$str));
    }
    if($_POST['submit_button'] == "snefru256")
    {
       $str=$_POST['name'];
       print(hash(snefru256,$str));
    }
    if($_POST['submit_button'] == "gost")
    {
       $str=$_POST['name'];
       print(hash(gost,$str));
    }
    if($_POST['submit_button'] == "gost-crypto")
    {
       $str=$_POST['name'];
       $s="gost-crypto";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "adler32")
    {
       $str=$_POST['name'];
       print(hash(adler32,$str));
    }
    if($_POST['submit_button'] == "crc32")
    {
       $str=$_POST['name'];
       print(hash(crc32,$str));
    }
    if($_POST['submit_button'] == "crc32b")
    {
       $str=$_POST['name'];
       print(hash(crc32b,$str));
    }
    if($_POST['submit_button'] == "haval128,3")
    {
       $str=$_POST['name'];
       $s="haval128,3";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval160,3")
    {
       $str=$_POST['name'];
       $s="haval160,3";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval192,3")
    {
       $str=$_POST['name'];
       $s="haval192,3";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval224,3")
    {
       $str=$_POST['name'];
       $s="haval224,3";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval256,3")
    {
       $str=$_POST['name'];
       $s="haval256,3";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval128,4")
    {
       $str=$_POST['name'];
       $s="haval128,4";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval160,4")
    {
       $str=$_POST['name'];
       $s="haval160,4";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval192,4")
    {
       $str=$_POST['name'];
       $s="haval192,4";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval224,4")
    {
       $str=$_POST['name'];
       $s="haval224,4";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval256,4")
    {
       $str=$_POST['name'];
       $s="haval256,4";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval128,5")
    {
       $str=$_POST['name'];
       $s="haval128,5";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval160,5")
    {
       $str=$_POST['name'];
       $s="haval160,5";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval192,5")
    {
       $str=$_POST['name'];
       $s="haval192,5";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval224,5")
    {
       $str=$_POST['name'];
       $s="haval224,5";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "haval256,5")
    {
       $str=$_POST['name'];
       $s="haval256,5";
       print(hash($s,$str));
    }
    if($_POST['submit_button'] == "fnv132")
    {
       $str=$_POST['name'];
       print(hash(fnv132,$str));
    }
    if($_POST['submit_button'] == "fnv1a32")
    {
       $str=$_POST['name'];
       print(hash(fnv1a32,$str));
    }
    if($_POST['submit_button'] == "fnv1a64")
    {
       $str=$_POST['name'];
       print(hash(fnv1a64,$str));
    }
    if($_POST['submit_button'] == "fnv164")
    {
       $str=$_POST['name'];
       print(hash(fnv164,$str));
    }
    if($_POST['submit_button'] == "joaat")
    {
       $str=$_POST['name'];
       print(hash(joaat,$str));
    }
?>

    <form method="post" action="default.php">
       <textarea rows="4" cols="50" name="name" value="value1"></textarea>
       <input type="submit" name="submit_button" value="Md5"/>
       <input type="submit" name="submit_button" value="Sha1"/>
       <input type="submit" name="submit_button" value="Md4"/>
       <input type="submit" name="submit_button" value="Md2"/>
       <input type="submit" name="submit_button" value="sha256"/>
       <input type="submit" name="submit_button" value="sha224"/>
       <input type="submit" name="submit_button" value="sha384"/>
       <input type="submit" name="submit_button" value="sha512"/>
       <input type="submit" name="submit_button" value="ripemd128"/>
       <input type="submit" name="submit_button" value="ripemd160"/>
       <input type="submit" name="submit_button" value="ripemd256"/>
       <input type="submit" name="submit_button" value="ripemd320"/>
       <input type="submit" name="submit_button" value="whirlpool"/>
       <input type="submit" name="submit_button" value="tiger128,3"/>
       <input type="submit" name="submit_button" value="tiger160,3"/>
       <input type="submit" name="submit_button" value="tiger192,3"/>
       <input type="submit" name="submit_button" value="tiger128,4"/>
       <input type="submit" name="submit_button" value="tiger160,4"/>
       <input type="submit" name="submit_button" value="tiger192,4"/>
       <input type="submit" name="submit_button" value="snefru"/>
       <input type="submit" name="submit_button" value="snefru256"/>
       <input type="submit" name="submit_button" value="gost"/>
       <input type="submit" name="submit_button" value="gost-crypto"/>
       <input type="submit" name="submit_button" value="adler32"/>
       <input type="submit" name="submit_button" value="crc32"/>
       <input type="submit" name="submit_button" value="crc32b"/>
       <input type="submit" name="submit_button" value="haval128,3"/>
       <input type="submit" name="submit_button" value="haval160,3"/>
       <input type="submit" name="submit_button" value="haval192,3"/>
       <input type="submit" name="submit_button" value="haval224,3"/>
       <input type="submit" name="submit_button" value="haval256,3"/>
       <input type="submit" name="submit_button" value="haval128,4"/>
       <input type="submit" name="submit_button" value="haval160,4"/>
       <input type="submit" name="submit_button" value="haval192,4"/>
       <input type="submit" name="submit_button" value="haval224,4"/>
       <input type="submit" name="submit_button" value="haval256,4"/>
       <input type="submit" name="submit_button" value="haval128,5"/>
       <input type="submit" name="submit_button" value="haval160,5"/>
       <input type="submit" name="submit_button" value="haval192,5"/>
       <input type="submit" name="submit_button" value="fnv132"/>
       <input type="submit" name="submit_button" value="fnv1a32"/>
       <input type="submit" name="submit_button" value="fnv164"/>
       <input type="submit" name="submit_button" value="fnv1a64"/>
       
       <input type="submit" name="submit_button"
