<h1>Articles</h1>
<p>
    <a href="<?php echo SITE_URL; ?>">&lt; Retour aux articles</a>
</p>

<?php 
if( isset( $datas[ 'article' ] ) )
{
    $row = $datas[ 'article' ]->fetch_array();
    ?>
        <article>
            <h2><a href="<?php echo SITE_URL; ?>/articles/detail/<?php echo $row[ 'IdArticle' ]; ?>"><?php echo $row[ 'TitleArticle' ]; ?></a></h2>
            <p>
                <?php echo $row[ 'IntroArticle' ]; ?>
            </p>
            <p>
                <?php echo $row[ 'ContentArticle' ]; ?>
            </p>
<a href="<?php echo SITE_URL; ?>/articles/del/<?php echo $row[ 'IdArticle' ]; ?>">DEL article</a> 
  <a href="<?php echo SITE_URL; ?>/articles/show/<?php echo $row[ 'IdArticle' ]; ?>">show article</a></br>
        </article>
    <?php
}