        <?php
        include('assets/includes/top.inc');
        ?>
        <title>Contact Arrow Photography</title>

        <?php
        include('assets/includes/header.inc');
        ?>
        <h2>Contact Arrow Photography</h2>
        <?php
        if(isset($_GET['submit'])){
            require_once('mail.php');
            $contact=new mail();
            $contact->sendEmail();
            $contact->to ='daniel.stewart93@gmail.com';
            if(!empty($contact->response)){
            echo$contact->response;
        };
        }
        ?>
        <form action="contact-class.php" method="get" id="contact-form">
            <!--add form to collect information:name, email, gender and comment. Name annd email are required-->
            <p>
                <label for="name">Your name:</label>
                <input type="text" name="name" id="name" required/>
            </p>
            <p>
                <label for="email">Contact email</label>
                <input type="email" name="email" id="email" required/>
            </p>
          <p>
              <label>Gender:</label>
              Male:
              <input type="radio" name="gender" value="male" checked/>
              Female:
              <input type="radio" name="gender" value="female" checked/>

          </p>
            <p>
                <label for="comment">Your comment:</label>
                <textarea name="comment" id="comment" rows="8" cols="18"></textarea>
            </p>
            <p>
                <label>&nbsp;</label>
                <input type="submit" name="submit" value="Send Comment" checked/>
            </p>
            <!-- Use styles sheet to put element into a table layout(tableless) -->
            </form>
        <?php
        include('assets/includes/footer.inc');
        ?>
