<table class="form-table">
  <tr>
    <th><?php _e("Source de l'information "); ?></th>
    <td>
      <select name="perso_time_information" id="perso_time_information">
        <!-- On fait en sorte que l'option soit sélectionnée en fonction de la valeur récupérée dans la db. -->
        <option value="">--</option>
        <option <?= $time == 'livre' ? 'selected' : '' ?> value="livre">Livre</option>
        <option <?= $time == 'journal' ? 'selected' : '' ?> value="journal">Journal</option>
        <option <?= $time == 'reseau_sociaux' ? 'selected' : '' ?> value="reseau_sociaux">Réseau Sociaux</option>
      </select>
    </td>
  </tr>
</table>

