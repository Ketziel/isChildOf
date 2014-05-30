isChildOf
=========

ModX plugin to find if a resource has a specified parent.

#Parameters


| Name | Type | Default Value | Description |
| ---- | ---- | ------------- | ----------- |
| &resource | string | [[*id]] | ID of resource to check parents of |
| &parent | string | '0' | ID of parent to check if resource is a Child of |
| &includeResource | string | 'false' | Include the child in the parent check - meaning it will return the True value if it is a child of &parent OR is &parent |
| &isChild | string | 'true' | String to return if &resource is a child of &parent |
| &isNotChild | string | 'false' | String to return if &resource is not a child of &parent |
| &toPlaceholder | string | '' | send output to specified Placeholder |

#License

hanzel is under the [GPL](http://www.gnu.org/copyleft/gpl.html) License.