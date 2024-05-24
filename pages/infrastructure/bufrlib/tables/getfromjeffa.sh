set -x

cd /home/www/emc/htdocs/emc/pages/infrastructure/bufrlib/tables
tar xvf /home/www/emc/htdocs/emc/pages/infrastructure/bufrlib_jeff/tables/emcrzdm.tar
/bin/rm -rf bufrtab_tablea.html; ln -sf TableA_0_STDv38_LOC7.html bufrtab_tablea.html
/bin/rm -rf bufrtab_tableb.html; ln -sf TableB_0_STDv38_LOC7.html bufrtab_tableb.html
/bin/rm -rf bufrtab_tabled.html; ln -sf TableD_0_STDv38_LOC7.html bufrtab_tabled.html
