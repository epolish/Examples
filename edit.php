﻿<div class="panel-body">
    <div class="form-group">
        <label>Name:</label>
        <input class="form-control" ng-model="currentItem.name" />
    </div>
    <div class="form-group">
        <label>Price:</label>
        <input class="form-control" ng-model="currentItem.price" />
    </div>

    <button class="btn btn-primary" ng-click="saveEdit(currentItem)">Save</button>
    <button class="btn btn-primary" ng-click="cancelEdit()">Cancel</button>
</div>