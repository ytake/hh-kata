<?hh // strict

namespace Ytake\HHKata\Repository;

use Ytake\HHKata\Entity\EntityInterface;

interface RepositoryInterface {

  public function add(EntityInterface $entity): void;

  public function remove(EntityInterface $entity): void;
}
