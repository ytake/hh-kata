<?hh // strict

namespace Ytake\HHKata\Usecase;

interface ParameterInterface<T> {
  
  public function setParam(string $key, T $value): void;

  public function getParam(string $key): T;

  public function getParams(): Map<string, T>;
}
