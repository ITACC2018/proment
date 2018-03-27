<?php

namespace Kanboard\Plugin\Calendar\Model;

use Kanboard\Core\Base;

/**
 * Holiday
 *
 * @package  model
 * @author   Ardyanto
 */
class Holiday extends Base
{
    /**
     * SQL table name
     *
     * @var string
     */
    const TABLE = 'holiday';

    /**
     * Get all holiday lines for a project
     *
     * @access public
     * @param  integer   $project_id
     * @return array
     */
    public function getAll($startTime, $endTime)
    {
        return $this->db->table(self::TABLE)->gte('start', $startTime)->lte('end', $endTime)->findAll();
    }

}
