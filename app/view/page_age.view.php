
<h1>Quelle est votre date de naissance ?</h1>
<h2>Vous devez avoir 18 ans ou plus pour continuer.</h2>
<form action="index.php" method="get">
<div class="formulaire">
<div class="form-jm">
  <label>
      <select>
            <option selected value="1">01</option>
            <?php for($i=02;$i<10;$i++):?>
                <option value="0<?=$i?>">0<?=$i?></option>
            <?php endfor?>
            <?php for ($i=10;$i<32;$i++):?>
                <option value="<?=$i?>"><?=$i?></option>
            <?php endfor?>
      </select>
  </label>
</div>
<div class="form-jm">
  <label>
      <select>
            <option value="01">01</option>
            <?php for ($i=02;$i<10;$i++):?>
                <option value="0<?=$i?>">0<?=$i?></option>
            <?php endfor?>
            <?php for ($i=10;$i<13;$i++):?>
                <option value="<?=$i?>"><?=$i?></option>
            <?php endfor?>
      </select>
  </label>
</div>
<div class="form-annee">
  <label>
      <select name="annee">
            <option select ="selected" value="2023">2023</option>
            <?php for ($i=2022;$i>1929;$i--):?>
                <option value="<?=$i?>"><?=$i?></option>
            <?php endfor?>
      </select>
  </label>
</div>
</div>
<span id="bouton"><input type="submit" value="Valider"/></span>
</form>


<h2 id="abus">L'abus d'alcool est dangereux pour la santé.</h2>