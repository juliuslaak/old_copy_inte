<form role="search" id="searchForm" action="<?php echo home_url( '/' ); ?>" method="get">
    <input class="h-search font-source" type="text" name="s" value="Otsi" onFocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" />
    <button type="submit" id="searchSubmit" class="icon-search"> </button>
</form>