<?php

namespace Nieruchomosci\Model;

use Laminas\Db\Adapter as DbAdapter;
use Laminas\Db\Sql\Sql;
use Laminas\Paginator\Adapter\LaminasDb\DbSelect;
use Laminas\Paginator\Paginator;

class Oferta implements DbAdapter\AdapterAwareInterface
{
    use DbAdapter\AdapterAwareTrait;

    /**
     * Pobiera obiekt Paginator dla przekazanych parametrów.
     *
     * @param array $szukaj
     * @return \Laminas\Paginator\Paginator
     */
    public function pobierzWszystko(array $szukaj = []): Paginator
    {
        $dbAdapter = $this->adapter;

        $sql = new Sql($dbAdapter);
        $select = $sql->select('oferty');

        if (!empty($szukaj['typ_oferty'])) {
            $select->where(['typ_oferty' => $szukaj['typ_oferty']]);
        }
        if (!empty($szukaj['typ_nieruchomosci'])) {
            $select->where(['typ_nieruchomosci' => $szukaj['typ_nieruchomosci']]);
        }
        if (!empty($szukaj['numer'])) {
            $select->where(['numer' => $szukaj['numer']]);
        }
        if(empty($szukaj['powierzchnia_OD'])) {
            $szukaj['powierzchnia_OD'] = 0;
        }
        if(empty($szukaj['powierzchnia_DO'])) {
            $szukaj['powierzchnia_DO'] = 999999999;
        }
        $select->where->between('powierzchnia', $szukaj['powierzchnia_OD'], $szukaj['powierzchnia_DO']);

        if(empty($szukaj['cena_OD'])) {
            $szukaj['cena_OD'] = 0;
        }
        if(empty($szukaj['cena_DO'])) {
            $szukaj['cena_DO'] = 999999999;
        }

        $select->where->between('cena', $szukaj['cena_OD'], $szukaj['cena_DO']);


        $paginatorAdapter = new DbSelect($select, $dbAdapter);

        return new Paginator($paginatorAdapter);
    }

    /**
     * Pobiera dane jednej oferty.
     *
     * @param int $id
     * @return array
     */
    public function pobierz(int $id): array
    {
        $dbAdapter = $this->adapter;

        $sql = new Sql($dbAdapter);
        $select = $sql->select('oferty');
        $select->where(['id' => $id]);

        $selectString = $sql->buildSqlString($select);
        $wynik = $dbAdapter->query($selectString, $dbAdapter::QUERY_MODE_EXECUTE);

        return $wynik->count() ? (array)$wynik->current() : [];
    }
}
