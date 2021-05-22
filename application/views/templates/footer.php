<!--
 * Name: Shannon Reidy
 * Coding 07
 * Purpose: template for footer
--> 
        
        <em>&copy; 2021</em>
        <a href = "https://massif-press.itch.io/" target = "_blank">Massif Press</a>
    </div>
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <?php if ($title === 'Pilot') : ?>
        <script src="/assets/js/pilot.js"></script>
        <?php endif; ?>
        <?php if($title === 'Contact') :?>
        <script src="/assets/js/contact.js"></script>
        <?php endif; ?>
    </body>
</html>