<?hh // strict

namespace Ytake\HHKata\Usecase;

use Ytake\HHKata\Entity\EntityInterface;
use Ytake\HHKata\Observer\Observable;

interface UsecaseInterface {

  public function buildUseCaseObservable<T>(
    ?ParameterInterface<T> $params
  ): Observable<EntityInterface>;
}
