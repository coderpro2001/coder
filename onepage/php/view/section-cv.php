
        <section>
            <h2>VOICI LE CV DE <?php echo $nomAuteur ?></h2>
            <p>AGE: <?php echo $age ?> ans<p>
            <p>VILLE: <?php echo $villeResidence ?? "VILLE PAR DEFAUT"; ?></p>
        </section>    

        <section>
            <h2><?php echo $titre2 ?? "MES COMPETENCES" ?></h2>
            <p>
            <?php
if ($testFront == true)
{
    // TOUTES LES INSTRCUTIONS DANS LE BLOC D'ACCOLADES EST EXECUTE PAR PHP
    echo "JE SUIS DEVELOPPEUR FRONT";
    echo " (HTML, CSS, JS)";
}
else
{
    // TOUTES LES INSTRCUTIONS DANS LE BLOC D'ACCOLADES EST EXECUTE PAR PHP
    echo "JE DOIS APPRENDRE LE FRONT";
    echo " (commencer par HTML et CSS)";
}
            ?>
            </p>
        </section>

        <section>
            <h2><?php echo $titre2 ?? "MES COMPETENCES" ?></h2>
            <p>
            <?php
if ($testBack == true)
{
    // TOUTES LES INSTRCUTIONS DANS LE BLOC D'ACCOLADES EST EXECUTE PAR PHP
    echo "JE SUIS DEVELOPPEUR BACK";
    echo " (PHP et SQL)";
}
            ?>
            </p>
        </section>

