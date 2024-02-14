<?php

namespace Sanamdeep\Userstory1a\Api\Data;

use Sanamdeep\Userstory1a\Api\Data\CustomCategoryInterface;
// use Magento\Catalog\Api\Data\CategoryExtensionInterface;

class CustomCategory implements CustomCategoryInterface
{
    public function getId() {

    }

    /**
     * Set category id.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id) {
        return $this;
    }

    /**
     * Get parent category ID
     *
     * @return int|null
     */
    public function getParentId() {
        return null;
    }

    /**
     * Set parent category ID
     *
     * @param int $parentId
     * @return $this
     */
    public function setParentId($parentId) {
        return $this;
    }

    /**
     * Get category name
     *
     * @return string|null
     */
    public function getName() {
        return null;
    }

    /**
     * Set category name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name) {
        return $this;
    }

    /**
     * Check whether category is active
     *
     * @return bool|null
     */
    public function getIsActive() {

    }

    /**
     * Set whether category is active
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive){
        return $this;
    }

    /**
     * Get category position
     *
     * @return int|null
     */
    public function getPosition() {

    }

    /**
     * Set category position
     *
     * @param int $position
     * @return $this
     */
    public function setPosition($position){
        return $this;
    }

    /**
     * Get category level
     *
     * @return int|null
     */
    public function getLevel(){

    }

    /**
     * Set category level
     *
     * @param int $level
     * @return $this
     */
    public function setLevel($level){
        return $this;
    }

    /**
     * Retrieve children ids comma separated.
     *
     * @return string|null
     */
    public function getChildren(){

    }

    /**
     * Retrieve category creation date and time.
     *
     * @return string|null
     */
    public function getCreatedAt(){

    }

    /**
     * Set category creation date and time.
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt){
        return $this;
    }

    /**
     * Retrieve category last update date and time.
     *
     * @return string|null
     */
    public function getUpdatedAt(){

    }

    /**
     * Set category last update date and time.
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt){
        return $this;

    }

    /**
     * Retrieve category full path.
     *
     * @return string|null
     */
    public function getPath(){

    }

    /**
     * Set category full path.
     *
     * @param string $path
     * @return $this
     */
    public function setPath($path){

        return $this;
    }

    /**
     * Retrieve available sort by for category.
     *
     * @return string[]|null
     */
    public function getAvailableSortBy(){

    }
    /**
     * Set available sort by for category.
     *
     * @param string[]|string $availableSortBy
     * @return $this
     */
    public function setAvailableSortBy($availableSortBy){
        return $this;
    }

    /**
     * Get category is included in menu.
     *
     * @return bool|null
     */
    public function getIncludeInMenu() {

    }

    /**
     * Set category is included in menu.
     *
     * @param bool $includeInMenu
     * @return $this
     */
    public function setIncludeInMenu($includeInMenu){
        return $this;
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\Catalog\Api\Data\CategoryExtensionInterface|null
     */
    public function getExtensionAttributes(){

    }

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes){
        return $this;
    }

    /**
     * Get an attribute value.
     *
     * @param string $attributeCode
     * @return \Magento\Framework\Api\AttributeInterface|null
     */
    public function getCustomAttribute($attributeCode){

    }

    /**
     * Set an attribute value for a given attribute code
     *
     * @param string $attributeCode
     * @param mixed $attributeValue
     * @return $this
     */
    public function setCustomAttribute($attributeCode, $attributeValue){
        return $this;
    }

    /**
     * Retrieve custom attributes values.
     *
     * @return \Magento\Framework\Api\AttributeInterface[]|null
     */
    public function getCustomAttributes(){

    }

    /**
     * Set array of custom attributes
     *
     * @param \Magento\Framework\Api\AttributeInterface[] $attributes
     * @return $this
     * @throws \LogicException
     */
    public function setCustomAttributes(array $attributes){
        return $this;

    }
}