<table class="form-table">
  <tr>
    <th><?php _e("Source de l'information "); ?></th>
    <td>
      <select name="perso_time_information" id="perso_time_information">
        <!-- On fait en sorte que l'option soit sélectionnée en fonction de la valeur récupérée dans la db. -->
        <option value=""><?= $_POST["perso_time_information"] ?></option>
        <option <?= $time == 'livre' ? 'selected' : '' ?> value="livre">Livre</option>
        <option <?= $time == 'journal' ? 'selected' : '' ?> value="journal">Journal</option>
        <option <?= $time == 'reseau_sociaux' ? 'selected' : '' ?> value="reseau_sociaux">Réseau Sociaux</option>
      </select>
    </td>
  </tr>

  <tr>
    <th><?= _e("Nombre de personne"); ?></th>
    <td>
      <!-- Création du visuel en html ( un input ) dans le quel on met en valeur la variable qui à été envoyée par le compact dans RecipeDetailsMetabox.php ligne 37 -->
      <input type="number" name="perso_nbr_personne" id="perso_nbr_personne" value="<?= $nbr_personne ?>" >
    </td>
  </tr>
  
</table>