<?php

namespace Src\Proxy\CachedRepository;

use Illuminate\Cache\Repository;

class CacheProductRepository implements ProductRepositoryInterface
{
    private ProductRepositoryInterface $productRepository;
    private Repository $cache;

    /**
     * @param ProductRepositoryInterface $productRepository
     * @param Repository $cache
     */
    public function __construct(ProductRepositoryInterface $productRepository, Repository $cache)
    {
        $this->productRepository = $productRepository;
        $this->cache = $cache;
    }


    public function getAll()
    {
        $result = $this->cache->get("all-product");
        if (is_null($result)) {
            $result = $this->cache->set("all-product", $this->productRepository->getAll());
        }
        return $result;
    }
}
