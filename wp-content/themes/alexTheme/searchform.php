<form class="form-inline my-2 my-lg-0" action='<?= esc_url(home_url('/')) ?>'>
    <input class="form-control mr-sm-2" type="search" name="s" placeholder="Recherche" aria-label="Search" value='<?= get_search_query() ?>'>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
</form>