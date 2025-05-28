<?php

namespace Drupal\content_stats\Services;

use Drupal\Core\Entity\EntityTypeManagerInterface;

class ContentStatisticsService
{

    protected $entityTypeManager;

    public function __construct(EntityTypeManagerInterface $entityTypeManager)
    {
        $this->entityTypeManager = $entityTypeManager;
    }

    public function getAllContentTypeCounts()
    {
        $types = $this->entityTypeManager->getStorage('node_type')->loadMultiple();
        $stats = [];

        foreach ($types as $type) {
            $stats[] = [
                'id' => $type->id(),
                'label' => $type->label(),
                'count' => $this->getNodeCount($type->id()),
            ];
        }

        return $stats;
    }

    public function getNodeCount($type_id)
    {
        $query = $this->entityTypeManager->getStorage('node')->getQuery()
            ->condition('type', $type_id)
            ->accessCheck(false);
        return $query->count()->execute();
    }
}
