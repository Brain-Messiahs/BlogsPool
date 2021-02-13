
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<img id="formimg" style="display: none;" src="<?php echo e(asset('account/students/form/form.jpg')); ?>">
<img style="display: none;" id="img" src="<?php echo e(asset("$photo")); ?>" >
<script type="text/javascript">
   var id="<?php echo e($id); ?>";
   var name="<?php echo e($name); ?>";
   var dob="<?php echo e($dob); ?>";
   var aadhar="<?php echo e($aadhar); ?>";
   var gender="<?php echo e($gender); ?>";
   var category="<?php echo e($category); ?>";
   var academic_year="<?php echo e($academic_year); ?>";
   var clas="<?php echo e($class); ?>";
   var course="<?php echo e($course); ?>";
   var coursetype="<?php echo e($coursetype); ?>";
   var mobile="<?php echo e($mobile); ?>";
   var email="<?php echo e($email); ?>";
   var f_name="<?php echo e($f_name); ?>";
   var f_occupation="<?php echo e($f_occupation); ?>";
   var m_name="<?php echo e($m_name); ?>";
   var m_occupation="<?php echo e($m_occupation); ?>";
   var f_mobile="<?php echo e($f_mobile); ?>";
   var address="<?php echo e($address); ?>";
    var add1 =address.substring(0,42);
    var add2 =address.substring(42,109);
    var add3 =address.substring(113,180);
   var fee_details="<?php echo e($fee_details); ?>";
   var photo="<?php echo e($photo); ?>";
   var reg_name="<?php echo e($reg_name); ?>";
   var created_at="<?php echo e($created_at); ?>";
       var doc = new jsPDF('p', 'mm', 'a4');
                 var img=document.getElementById("formimg");
                 doc.addImage(img,'JPEG',0,0,210,297);
                 doc.setFont("times");
                 doc.setFontType("italic");
                 doc.setFontType("bold");
                 doc.setFontSize(12);
                 doc.text(41,58.5,created_at);
                 doc.text(75,70,name);
                 doc.text(54,81,dob);
                 doc.text(112,81,''+aadhar);
                 doc.text(45,92,gender);
                 doc.text(140,92,category);
                 doc.text(63,103,course);
                 doc.text(134,103,clas);
                 doc.text(57,113,f_name);
                 doc.text(68,123,f_occupation);
                 doc.text(59,133.8,m_name);
                 doc.text(69,144.5,m_occupation);
                 doc.text(77,154,add1);
                 doc.text(29,163.5,''+add2);
                 doc.text(29,173,''+add3);
                 doc.text(71,184.5,''+mobile);
                 doc.text(131,184.5,''+f_mobile);
                 doc.text(50,195,''+fee_details);
                 var imgs=document.getElementById("img");
                doc.addImage(imgs,'JPEG',173,60,24,30);
                 doc.output('dataurlnewwindow');
       
                
                
</script>
