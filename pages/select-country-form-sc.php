<?php
/* 
 * Copyright (C) 2015 sunyata
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

chdir(dirname(__FILE__));

function pf_select_country_shortcode() {
  <form action="form-result-page-1" method="get">
    Please select your country:<br>
    <input name="country" list="countries">
    <datalist id="countries">
      <option value="Sweden">
      <option value="Ethiopia">
      <option value="England">
      <option value="China">
      <option value="Czech Republic">
    </datalist>
    <input type="submit" value="Next">
  </form>
}



add_shortcode('pf_select_country', 'pf_select_country_shortcode');
