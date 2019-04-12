<table class="form-table">
  <tr>
      <th><?php _e("Source de l'information"); ?></th>
      <td>
        <select name="perso_type_information" id="perso_type_information">
        <!-- On fait en sorte que l'option soit sélectionnée en fonction de la valeur récupérée dans la db. -->
          <option value="">--</option>
          <option <?php echo $source == 'audio' ? 'selected' : '' ?> value="audio">Audio</option>
          <option <?php echo $source == 'texte' ? 'selected' : '' ?> value="texte">Texte</option>
          <option <?php echo $source == 'video' ? 'selected' : '' ?> value="video">Video</option>
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